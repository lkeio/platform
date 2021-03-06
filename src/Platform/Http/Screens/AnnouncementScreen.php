<?php

declare(strict_types=1);

namespace Orchid\Platform\Http\Screens;

use Orchid\Screen\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;
use Orchid\Platform\Models\Announcement;
use Orchid\Platform\Http\Layouts\AnnouncementLayout;

class AnnouncementScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Announcements';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Messages for all users';

    /**
     * @var string
     */
    public $permission = 'platform.systems.announcement';

    /**
     * @var bool
     */
    private $active = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $announcement = Announcement::getActive();
        $this->active = ! is_null($announcement);

        return [
            'announcement' => $announcement,
        ];
    }

    /**
     * @return array
     */
    public function commandBar(): array
    {
        return [
            Link::name(__('Create'))
                ->icon('icon-check')
                ->method('saveOrUpdate')
                ->show(! $this->active),

            Link::name(__('Refresh'))
                ->icon('icon-check')
                ->method('saveOrUpdate')
                ->show($this->active),

            Link::name(__('Delete'))
                ->icon('icon-trash')
                ->method('disabled')
                ->show($this->active),
        ];
    }

    /**
     * Views.
     *
     * @return array
     */
    public function layout(): array
    {
        return [
            AnnouncementLayout::class,
        ];
    }

    /**
     * @param \Orchid\Platform\Models\Announcement $announcement
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveOrUpdate(Announcement $announcement, Request $request)
    {
        $announcement
            ->fill($request->get('announcement'))
            ->fill([
                'user_id' => $request->user()->id,
                'active'  => 1,
            ])->save();

        Alert::info(__('Announcement has been created or updated.'));

        return back();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function disabled()
    {
        Announcement::disableAll();
        Alert::info(__('Announcement has been turned off.'));

        return back();
    }
}
