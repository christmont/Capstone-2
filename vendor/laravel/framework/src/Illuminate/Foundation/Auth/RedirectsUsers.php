<?php

namespace Illuminate\Foundation\Auth;
Use Auth;



trait RedirectsUsers
{
use RegistersUsers;
 
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        
        if(Auth::user()->position == 'Administrative Staff')
        {
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
        }
        if(Auth::user()->position == 'Lawyer')
        {
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/lawyerside/show';
        }
                                                } 
    }
}
