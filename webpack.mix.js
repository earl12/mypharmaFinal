let mix = require('laravel-mix');		


//Courier and others...
// mix.js('resources/assets/js/js/sweetalert.js','public/dist/js');

//Admin modules..

// mix.js('resources/assets/js/js/admin.js','public/dist/js');



mix.js('resources/assets/js/app.js', 'public/dist/js');

// mix.js('resources/assets/js/main.js','public/build/js/');


// mix.js('public/dist/js/functions.js', 'public/dist/js/functions.js');


if (!process.env.NODE_HOT) {
	mix.version();
}
// mix.combine(['resources/assets/lib/jquery.min.js',
// 	'resources/assets/lib/jquery.swipebox.min.js',
// 	'resources/assets/lib/jquery.smoothState.min.js',
// 	'resources/assets/lib/materialize.min.js',
// 	'resources/assets/lib/swiper.min.js',
// 	'resources/assets/lib/jquery.mixitup.min.js',
// 	'resources/assets/lib/masonry.min.js',
// 	'resources/assets/lib/Chart.min.js',
// 	'resources/assets/lib/functions.js',
// 	],'public/dist/js/courier.js');


// mix.combine(['resources/assets/lib/keyframes.css',
// 	'resources/assets/lib/materialize.min.css',
// 	'resources/assets/lib/swiper.css',
// 	'resources/assets/lib/swipebox.min.css',
// 	'resources/assets/lib/styles.css',
// 	],'public/dist/css/courier.css');


// mix.version();


// mix.js('resources/assets/js/js/maps.js','public/build/js/maps.js');

// mix.combine(['resources/assets/lib/styles/style.css',
// 	'resources/assets/lib/styles/framework-style.css',
// 	'resources/assets/lib/styles/framework.css',
// 	'resources/assets/lib/styles/coach.css',
// 	'resources/assets/lib/styles/icons.css',
// 	'resources/assets/lib/styles/retina.css',
// 	],'public/build/css/app_courier.css') ; 

// mix.combine(['resources/assets/lib/scripts/jquery.min.js',
// 	'resources/assets/lib/scripts/jquery-ui-min.js',
// 	'resources/assets/lib/scripts/subscribe.js',
// 	'resources/assets/lib/scripts/contact.js',
// 	'resources/assets/lib/scripts/swipe.js',
// 	'resources/assets/lib/scripts/swipebox.js',
// 	'resources/assets/lib/scripts/colorbox.js',
// 	'resources/assets/lib/scripts/retina.js',
// 	'resources/assets/lib/scripts/custom.js',
// 	'resources/assets/lib/scripts/framework.js',
// 	],'public/build/js/app_courier.js') ; 






// mix.combine(['resources/assets/lib/mobile/js/.css',
// 	'resources/assets/lib/mobile/style.css',
// 	'resources/assets/lib/mobile/swipebox.css',
// 	],'public/css/app.css') ; 





//Admin..
// mix.combine(['public/assets/js/core/jquery.min.js',
// 	'public/assets/js/core/popper.min.js',
// 	'public/assets/js/core/bootstrap.min.js',
// 	'public/assets/js/core/jquery.slimscroll.min.js',
// 	'public/assets/js/core/jquery.scrollLock.min.js',
// 	'public/assets/js/core/jquery.appear.min.js',
// 	'public/assets/js/core/jquery.countTo.min.js',
// 	'public/assets/js/core/js.cookie.min.js',
// 	'public/assets/js/codebase.js'
// 	],'public/build/js/core-admin.js');

// mix.js('resources/assets/js/admin.js','public/build/js/admin.js');


// mix.sass('resousrces/assets/sass/app.scss','public/css/app2.css');

// mix.version();	



// if (process.env.npm_lifecycle_event !== 'hot') {
// 	mix.version()
// }
// const path = require('path');
// // fix css files 404 issue
// mix.webpackConfig({
// 	devServer: {
// 		contentBase: path.resolve(__dirname, 'public'),
// 	}
// });




























// mix.sass('resources/asets/sass/main.scss','public/css/app.css');



// mix.styles(['public/assets/css/alpha.min.css','public/assets/css/custom.css'],'public/css/main.css');


// mix.css('resources/assets/sass/layouts.scss','public/css/app.css');

// mix.styles(['resources/assets/lib/plugins/metrojs/MetroJs.min.css',
// 	'resources/assets/lib/plugins/weather-icons-master/css/weather-icons.min.css',
// 	],'public/css/dashboard.css') ; 



// mix.styles(['resources/assets/lib/css/alpha.min.css',
// 	'resources/assets/lib/css/custom.css'],'public/css/theme-styles.css');

// mix.scripts(['resources/assets/lib/plugins/materialize/js/materialize.min.js',
// 	'resources/assets/lib/plugins/material-preloader/js/materialPreloader.min.js',
// 	'resources/assets/lib/plugins/jquery-blockui/jquery.blockui.js',
// 	'resources/assets/lib/plugins/js/alpha.min.js'
// 	],'public/build/js/dashboard.js');


// mix.sass('resources/assets/js/main.scss','public/build/css');

// mix.js(['resources/assets/js/store_info.js',
// 	'resouces/assets'
// 	],'public/js');


// mix.js('resources/assets/js/script.js','public/js');


// mix.styles(['public/assets/css/font-awesome.min.css','resources/assets/lib/bootstrap4.0.css','resources/assets/lib/main.css'],'public/css/courier/dashboard.css') ;
// mix.scripts(['resources/assets/lib/jquery.min.js',
// 			 'resources/assets/lib/tether/tether.min.js',
// 			 'resources/assets/js/lib/bootstrap/bootstrap.min.js',
// 			 'resources/assets/lib/plugins.js','resources/assets/lib/app.js'],'public/js/courier/dashboard.js') ; 

// mix.js(['resources/assets/js/scripts/tspsolver.js' , 
// 	'resources/assets/js/scripts/tsp.js'
// 	'resources/assets/js/scripts/tsp-init.js', 
// 	],'js/tsp.js') ; 

// mix.js('resources/assets/js/xhr/get.js','public/js');
// mix.sass('resources/assets/sass/fonts.scss','public/css');



// mix.js('resources/assets/js/app.js','public/js/app.js');
// mix.js('public/js/actions.js','public/js');








// mix.js('re')


// mix.js('resources/assets/sass/fonts.scss', 'public/css');
// mix.js('resources/assets/js/xhr/_request.js','public/js')
// mix.version();




// mix.combine(['resources/assets/lib/css/bootstrap.min.css',
// 	'resources/assets/lib/vendors/themify/css/themify-icons.css',
// 	'resources/assets/lib/vendors/iCheck/css/all.css',
// 	'resources/assets/lib/vendors/bootstrapvalidator/css/bootstrapValidator.min.css',
// 	'resources/assets/lib/css/login.css', ],'public/dist/css/auth.css')


// mix.combine(['resources/assets/lib/vendors/iCheck/css/all.css',
// 	'resources/assets/lib/vendors/bootstrap-fileinput/css/fileinput.min.css',
// 	'resources/assets/lib/css/custom_css/skins/skin-default.css',
// 	'resources/assets/lib/css/formelements.css',
// 	],'public/dist/css/forms.css'); 




// mix.combine(['resources/assets/lib/vendors/iCheck/js/iCheck.js',
// 	'resources/assets/lib/vendors/bootstrap-fileinput/js/fileinput.min.js',
// 	'resources/assets/lib/js/custom_js/form_elements.js',
// 	],'public/dist/js/forms.js'); 



// mix.combine([
// 	'./resources/assets/lib/css/app.css',
// 	'./resources/assets/lib/css/custom.css',
// 	'./resources/assets/lib/css/custom_css/skins/skin-default.css',
// 	'./resources/assets/lib/vendors/animate/animate.min.css',
// 	'./resources/assets/lib/css/custom_css/advanced_modals.css']
// 	,'public/dist/css/modal.css') ;


// mix.copy(['./resources/assets/lib/js/custom_js/advanced_modals.js'],
// 	'public/dist/js/modal.js') ;



// mix.combine(['resources/assets/lib/css/custom.css',
// 	'resources/assets/lib/css/custom_css/skins/skin-default.css', 
// 	'resources/assets/lib/vendors/sweetalert2/css/sweetalert2.min.css', 
// 	'resources/assets/lib/css/custom_css/sweet_alert2.css',
// 	'resources/assets/sass/sweetalert.css',
// 	'resources/assets/sass/fonts.scss'
// 	],'public/dist/css/sweetalert.css') ; 


// mix.copy('resources/assets/lib/vendors/sweetalert2/js/sweetalert2.min.js','public/dist/js/sweetalert.js') ;





// mix.combine(['public/dist/css/sweetalert2.min.css',
// 	'public/dist/css/sweet_alert2.css'
// 	],'public/dist/css/sweetalert.css') ; 

// mix.combine(['public/dist/css/animate.min.csss',
// 	'public/dist/css/advanced_modals.css'
// 	],'public/dist/css/modal.css') ; 


// mix.combine(['public/dist/js/js/jquery.dataTables.js',
// 	'public/dist/js/dataTables.bootstrap.js',
// 	'public/dist/js/datatables_custom.js'
// 	],'public/dist/js/table.js')


// mix.combine(['public/dist/js/sweetalert2.min.js',
// 	'public/dist/js/sweetalert.js'],'public/dist/js/sweetalert.js')



// mix.combine(['resources/assets/lib/mobile/js/jquery-1.10.1.min.js',
// 	'resources/assets/lib/mobile/js/jquery.validate.min.js',
// 	'resources/assets/lib/mobile/js/framework7.min.js',
// 	'resources/assets/lib/mobile/js/my-app.js',
// 	'resources/assets/lib/mobile/js/jquery.swipebox.js',
// 	'resources/assets/lib/mobile/js/jquery.fitvids.js',
// 	'resources/assets/lib/mobile/js/email.js'],'public/build/js/app_courier.js');


// mix.
