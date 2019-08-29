var Event = function () {
    this.__construct = function () {

        this.changeTheme();
        this.offDarkMode();
        this.onDarkMode();
    };



    this.changeTheme = function () {
        
        $(document).ready(function(){
            var url = $('#check-theme').val();
            $.post(url,'',function(out){
                if(out.result===1){
//                    alert(out.dark_mode);
                    if(out.dark_mode==='on'){
                        obj.offDarkMode();
//                        $('.switch input').is()
                        $('.switch input').prop('checked', true);
                    }else{
                        obj.onDarkMode();
                        $('.switch input').prop('checked', false);
                    }
                }
            });
        });
        
        
        $(document).on('click', '.switch input', function (evt) {
            var url = $('#change-theme').val();
            if ($('.switch input').is(':checked')) {

                $.post(url, {dark_mode: 'on'}, function (out) {
                    if (out.result === 1) {
                        obj.offDarkMode();
                    }
                });
            } else {

                $.post(url, {dark_mode: 'off'}, function (out) {
                    if (out.result === 1) {
                        obj.onDarkMode();
                    }
                });
            }


        });
    };

    this.offDarkMode = function () {
        var colorui = $('#colorui').val();
        $('.back_color').addClass('darkmode');
        $('.header').css('background-color', '#2b2e43');
        $('.changetextcolor').css('color', '#fff');
        $('.head_logo a img').attr('src', colorui + 'assets/img/logowhite.png');
        $('.rightBx_inr button img').attr('src', colorui + 'assets/img/arrowdownwhite.svg');
        $('.download a').css('background-color', '#224562');
        $('.paymentby').css('background-color', '#224562');
        $('.attach').css({'background-color': '#3f435d', 'border-color': '#3f435d'});
        $('.pending').css('background-color', '#413c3c');
        $('.modal-content').addClass('darkmode');
        $('.break_tab li a.active').addClass('activechange');
        $('.remove').css('background-color', '#3b2e41');
        $('.fixtures li a img').attr('src', colorui + 'assets/img/viewwhite.svg');
        $('.upload a img').attr('src', colorui + 'assets/img/plus.svg');
        $('.foryellow').addClass('foryellow1');
        $('.forblue').addClass('forblue1');
        $('.forpurple').addClass('forpurple1');
        $('.forred').addClass('forred1');
        $('.fororange').addClass('fororange1');
        $('.forindigo').addClass('forindigo1');
        $('.forpink').addClass('forpink1');
        $('.chooseone').removeClass('choosetwo').addClass('choosethree');
        $('.break_tab li a').removeClass('active');
        $('.cont2').addClass('contdark');
        $('.cont3').addClass('contdark');
        $('.addpayment').addClass('contdark');
        $('.chooseone label.customadd span').css('color', '#fff');
        $('.forborder').css('border-color', '#3F435D');
    };

    this.onDarkMode = function () {
        var colorui = $('#colorui').val();
        $('.back_color').removeClass('darkmode');
        $('.header').css('background-color', '#fff');
        $('.changetextcolor').css('color', '#031019');
        $('.head_logo a img').attr('src', colorui + 'assets/img/logoblue.svg');
        $('.rightBx_inr button img').attr('src', colorui + 'assets/img/arrowdown.svg');
        $('.download a').css('background-color', '#e5f8ff');
        $('.paymentby').css('background-color', '#e5f8ff');
        $('.attach').css({'background-color': '#ecf1f4', 'border-color': '#ecf1f4'});
        $('.pending').css('background-color', '#fef8e9');
        $('.modal-content').removeClass('darkmode');
        $('.break_tab li a.active').css('color', '#031019');
        $('.remove').css('background-color', '#ffe8e8');
        $('.fixtures li a img').attr('src', colorui + 'assets/img/view.svg');
        $('.upload a img').attr('src', colorui + 'assets/img/plusblack.svg');
        $('.foryellow').removeClass('foryellow1');
        $('.forblue').removeClass('forblue1');
        $('.forpurple').removeClass('forpurple1');
        $('.forred').removeClass('forred1');
        $('.fororange').removeClass('fororange1');
        $('.forindigo').removeClass('forindigo1');
        $('.forpink').removeClass('forpink1');
        $('.chooseone').removeClass('choosethree').addClass('choosetwo');
        $('.cont2').removeClass('contdark enabled2');
        $('.cont3').removeClass('contdark')
        $('.chooseone label.customadd span').css('color', '#031019');
        $('.forborder').css('border-color', '#D8DDE4');
        $('.break_tab li a.activechange').addClass('active');
        $('.break_tab li a').removeClass('activechange');
    };
    

    this.__construct();
};
var obj = new Event();