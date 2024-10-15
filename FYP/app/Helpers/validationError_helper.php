
<?php 


if(!function_exists('getErrorMessage'))
{
    function getErrorMessage($ses, $key)
    {
        if(session()->has($ses)){
            if( array_key_exists($key,session($ses) ))
            {
                // dd(session($ses)[$key]);
                return session($ses)[$key];
            }
                    
            return '';
            
        }
        return '';
    }
}

