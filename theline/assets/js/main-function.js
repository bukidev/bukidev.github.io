'use strict'
            
            $.mobile.loading().hide();
            
            var doctorVideo = document.getElementById('jongVideo');
            var doctorChoVideo = document.getElementById('choVideo');
            
            
            
            
            
            $(function() {
                setTimeout(function() {
                    $('#preload').removeClass('active');
                    if(window.innerWidth >= 1025) {
                        doctorVideo.play();
                    };
                }, 3000);
                
                //waypoint
                var section1 = $('#jongVideo');
                section1.waypoint(function(direction) {
                    if(direction == 'down') {
                        console.log('pause video');
                        
                        if(window.innerWidth >= 1025) {
                            doctorVideo.pause();
                        }
                    } else if (direction == 'up') {
                        if(window.innerWidth >= 1025) {
                            doctorVideo.play();
                        }
                    }
                    
                });
                
                
                $("#input-4").fileinput({showCaption: false});
                    
            }); 
            
            function consult() {
                $('#formOverlay').addClass('active');
                setTimeout(function() {
                    $('#form-container').addClass('container');
                    $('#consultForm').css('display', 'block');
                }, 150);
                doctorVideo.pause();
                if(window.innerWidth >= 1025) {
                    doctorChoVideo.play();
                }
                
                if(window.innerWidth < 1025) {
                    $('#playChoVdoBtn').css('display','block');
                    $('#choVideoScreen,#choVideoScreen>img').css('display','block');
                }
            };
            function closeConsult() {
                $('#formOverlay').removeClass('active');
                $('#form-container').removeClass('container');
                $('#consultForm').css('display', 'none');
                //doctorVideo.play();
                doctorChoVideo.pause();
                
                if(window.innerWidth < 1025) {
                    $('#playChoVdoBtn').css('display','none');
                    $('#choVideoScreen,#choVideoScreen>img').css('display','none');
                }
            };
            
            function playVideo() {
                doctorVideo.click();
            };
            
            function playChoVideo() {
                doctorChoVideo.click();
            };
            
            
            var video = $('#jongVideo');
            video.on('click', function(e){
                var vid = video[0];
                vid.play();
                if (vid.requestFullscreen) {
                  vid.requestFullscreen();
                } else if (vid.mozRequestFullScreen) {
                  vid.mozRequestFullScreen();
                } else if (vid.webkitRequestFullscreen) {
                  vid.webkitRequestFullscreen();
                }
            });
            
            var video2 = $('#choVideo');
            video2.on('click', function(e){
                var vid = video2[0];
                vid.play();
                if (vid.requestFullscreen) {
                  vid.requestFullscreen();
                } else if (vid.mozRequestFullScreen) {
                  vid.mozRequestFullScreen();
                } else if (vid.webkitRequestFullscreen) {
                  vid.webkitRequestFullscreen();
                }
            });