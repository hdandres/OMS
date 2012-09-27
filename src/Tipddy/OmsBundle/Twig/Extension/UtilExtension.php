<?php
  
namespace Tipddy\OmsBundle\Twig\Extension;

//use MakerLabs\PagerBundle\Pager;
  
class UtilExtension extends \Twig_Extension
{

     public function getFunctions()
     {
     
         return array(
            'route_active' => new \Twig_Function_Method($this, 'routeActive')
            /*'first_register_pager' => new \Twig_Function_Method($this, 'getFirstRegisterPager'),
            'last_register_pager' => new \Twig_Function_Method($this, 'getLastRegisterPager'),*/
         );
     
     }
     
   public function routeActive($route_current, $route_compare)
   {
      $result = false;
          
      if ($route_current) {
        
         $route_current = explode('_', $route_current);
 
         if (is_array($route_current)) {
               
            if (!is_array($route_compare)) {
              
              $result = $route_current[0] == $route_compare ? true : false;
            
            } else {
              
              $result = in_array($route_current[0], $route_compare) ? true : false;
            
            }
        
         }
      
      }
       
     return $result;
   
   } 
   
   public function getName()
   {
      return 'tipddy_oms_util_extension';
      
   } 
}
