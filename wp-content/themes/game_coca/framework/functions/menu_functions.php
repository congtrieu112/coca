<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if( !class_exists( 'TheCoCa_Menu' ) ) {
	
	class TheCoCa_Menu {
		function __construct(){
			$this->init();
			
		}
		
		public function init(){
			register_nav_menus( array(
			    'main-menu' => 'Main menu',
			) );
            add_action('menu_top',array($this,'show_menu'),1);

			
		}
        function show_menu($name){
            $menu = $this->get_menu($name);
            $this->show_menu_nomal($menu);
//            print "<pre>";
//            print_r($menu);
//            print "</pre>";
        }
		function get_menu($menu_name){
		    $locations = get_nav_menu_locations();
		    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

		    return $menuitems;
		}

		function check_parent_menu($menu,$id){
		    $flag = false ;
		    foreach ($menu as $item ){
		        if($item->menu_item_parent == $id){
		            $flag = true;
		            break;
		        }
		    }
		    return $flag;

		}
        function  show_menu_nomal($array_menu){
            print "<ul class='nav navbar-nav max-with-menu coca-menu-top'>";
            $end_menu = count($array_menu);
            $i=0;
            foreach ($array_menu as $item){
                $i++;
                if($i==$end_menu){
                    if(is_user_logged_in()){
						$current_user = wp_get_current_user();
                        print "<li class='loged'>";
                    		print "<a href='javascript:void(0)' class='avata-user'><img src='".THEME_IMG_URI."avata.png' ></a>";
                        	print "<a href='javascript:void(0)' class='profile-user'> $current_user->display_name</a>";
                        	print "<a href='javascript:void(0)' class='logout-user'>".__('Đăng xuất','coca')."</a>";
                        print "</li>";
                    }else{
						print "<li class='meunu-li' >";
						print "<a href='$item->url'>$item->title</a>";
						print "</li>";
					}
                }else{
					print "<li class='meunu-li' >";
					print "<a href='$item->url'><span>$item->title</span></a>";
					print "</li>";
				}

            }
            print "</ul>";
        }
		function show_menu_recursion($array_menu,$id_parent=0,$class= false,$icon=false ){
		    $class_ul_custom = ($class)? $class : '';
		    $class_ul = ($id_parent) ? "dropdown-menu vd-sub-menu-chrient":"nav navbar-nav ".$class_ul_custom;
		    if($icon){
		        echo "<ul class='".$class_ul."' id='parent-ul'>";
		        foreach ($array_menu as $item){
		            if($item->title=='More'){
		                if($item->menu_item_parent==$id_parent ){
		                    $flag = check_parent_menu($array_menu,$item->ID);
		                    $class_li_parent = ($flag) ? "dropdown" : "";
		                    $class_li = ($id_parent) ? "nt-sub":"vd-li-parent ".$class_li_parent.' end';
		                    $atribute_a = ($flag)? 'class="dropdown-toggle button-more" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"' : "";
		                    $icon_a = ($id_parent)? '<i class="icon ion-ios-keypad" ></i>' : "";
		                    echo "<li class='".$class_li."' >";
		                    echo "<a href='".$item->url."' ".$atribute_a. ">".'<i class="icon ion-android-menu incon-more-menu"></i>'."</a>";
		                    if($flag){
		                        show_menu_recursion($array_menu,$item->ID);
		                    }
		                    echo "</li>";
		                }
		            }
		        }
		        echo "</ul>";
		    }else{
		        echo "<ul class='".$class_ul." ' id='parent-ul'>";
		        foreach ($array_menu as $item){
		            $class_ul_custom = ($class)? $class : '';
		            $class_ul = ($id_parent) ? "dropdown-menu vd-sub-menu-chrient":"nav navbar-nav ".$class_ul_custom;
		            if($item->title!=='More'){
		                if($item->menu_item_parent==$id_parent){
		                    $flag = check_parent_menu($array_menu,$item->ID);
		                    $class_li_parent = ($flag) ? "dropdown" : "";
		                    $class_li = ($id_parent) ? "nt-sub":"vd-li-parent ".$class_li_parent;
		                    $span_a = ($flag)? ' <span class="caret"></span>': '';
		                    $atribute_a = ($flag)? 'class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"' : "";
		                    $icon_a = ($id_parent)? '<i class="icon ion-ios-keypad" ></i>' : "";
		                    echo "<li class='".$class_li."'>";
		                    echo "<a href='".$item->url."' ".$atribute_a. ">".$icon_a.$item->title.$span_a ."</a>";
		                    if($flag){
		                        show_menu_recursion($array_menu,$item->ID);
		                    }
		                    echo "</li>";
		                }
		            }
		        }
		        
		        
		        echo "</ul>"; 
		    }
		    
		}







	}

	new TheCoCa_Menu();
}
