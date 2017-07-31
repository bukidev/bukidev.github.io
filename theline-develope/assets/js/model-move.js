///////////////////for model turn/////////////////
            var i = 3;
            
            //for pc
            $('.model-active').on('mousewheel', function(event) {
                console.log(event.deltaY + ' mouse wheel option work!');
                
                event.preventDefault();
                
                if (event.deltaY > 0) {
                    if (i < 5) {
                        i = i += 1;
                    }
                } else {
                    if (i > 1) {
                        i = i -= 1;
                    }
                }
                
                var debug = $('.model-active').attr('src','assets/img/360-model-' + i + '.png');
                console.log(i);
            });
            
            //for mobile and smart phone
            
            $(document).on('swiperight', '.model-active', function(e) {
                if (i < 5) {
                    i = i += 1;
                }
                
                $('.model-active').attr('src','assets/img/360-model-' + i + '.png');
                console.log('swiperight' + i);
            });
            
            $(document).on('swipeleft', '.model-active', function(e) {
                if (i > 1) {
                    i = i -= 1;
                }
                
                $('.model-active').attr('src','assets/img/360-model-' + i + '.png');
                console.log('swipeleft' + i);
            });
                
            //////////////////// end model turn//////////////////////////