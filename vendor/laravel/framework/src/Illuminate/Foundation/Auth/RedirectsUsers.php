<?php

namespace Illuminate\Foundation\Auth;




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
        }
        
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
       
        
    }
}
