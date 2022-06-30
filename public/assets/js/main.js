new Vue({
    el: '#app',
    data: {
        dropdown2: false,
        height: null,
    },
    methods: {
        toggleMobile() {
            this.dropdown2 = !this.dropdown2
        },
        matchHeight() {
            if (this.dropdown2 == true) {
              this.height = (this.$refs.infoBox.clientHeight - 60) + 'px' 
            } else {
              this.height = 0
            }
        },
    },
    watch: {
        dropdown2() {
            this.matchHeight()
        }
    },
    mounted() {
        this.matchHeight()
    }
})
$(function(){

});
$(document).ready(function(){
    $('.partner__items').slick({
      dots: true,
      arrows: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      infinity: true,
      speed: 1000,
      autoplay:true,
      autoplaySpeed:1500,
      pauseOnHover:true,
      pauseOnFocus:true,
      variableWidth:true,
      });

      $('.new__items').slick({
        dots: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinity: true,
        speed: 1000,
        autoplay:true,
        autoplaySpeed:1500,
        pauseOnHover:true,
        pauseOnFocus:true,
        variableWidth:true,
        centerMode: true,
        centerPadding: '60px',
        });

        $('#subscription').click(function () {
            console.log($);
            var url = $(this).data('href');
            $.ajax()({
                url: url,
                type: "POST",
                dataType: 'json',
                success: function () {
                    console.log('asda');
                },
                error: function (msg) {
                    console.log('Ошибка');
                }
            });
        });

        $("#subscription").submit(function(event) {
          event.preventDefault();
          let form = $(this);
          let action = form.attr("action");
          let type = form.attr("method");
          let fd = new FormData(form[0]);
          let $inputs = form.find("input, select, button, textarea");
          axios.post(action, fd).then(res => {;
              if (res.status === 200) {
                  $('#m-subscribed').modal('show');
              }
              $inputs.prop("disabled", false);
              $inputs.val("");
              $inputs.prop("checked",false);
            }).catch((error) => console.log(error.response.data));   
        }); 

        $("#requestFor").submit(function(event) {
          event.preventDefault();
          let form = $(this);
          let action = form.attr("action");
          let type = form.attr("method");
          let fd = new FormData(form[0]);
          let $inputs = form.find("input, select, button, textarea");
          axios.post(action, fd).then(res => {;
              if (res.status === 200) {
                  $('#appModal').modal('hide');
                  $('#m-thanks').modal('show');
              }
              $inputs.prop("disabled", false);
              $inputs.val("");
              $inputs.prop("checked",false);
            }).catch((error) => console.log(error.response.data));   
        });

        $("#eventback").submit(function(event) {
          event.preventDefault();
          let form = $(this);
          let action = form.attr("action");
          let type = form.attr("method");
          let fd = new FormData(form[0]);
          let $inputs = form.find("input, select, button, textarea");
          axios.post(action, fd).then(res => {;
              if (res.status === 200) {
                  $('#appModal').modal('hide');
                  $('#m-thanks').modal('show');
              }
              $inputs.prop("disabled", false);
              $inputs.val("");
              $inputs.prop("checked",false);
            }).catch((error) => console.log(error.response.data));   
        });
});

function changeLocale(val) {
    axios.get(`/locale/${val}`).then((data) => location.reload());
}

document.addEventListener("DOMContentLoaded", () => {
      //Change the top language
      let langSelect = document.querySelectorAll('.lang');
      langSelect.forEach((elem) => {
          elem.addEventListener('change', (e) => {             
            changeLocale(e.target.value);
          });
      });        
});
  