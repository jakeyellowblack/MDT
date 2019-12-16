<?php namespace MDT\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use MDT\User as User;

class ProfileComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $users = User::all();
        $view->with('users', $users);
    }

}