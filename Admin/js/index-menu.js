
// Autor:Nilson dias
// Tipo:Menu-lateral, corpo, efitos.
// Inspirado no DevMidea.

var menu = document.querySelector('.nav__lista');
var corpo = document.querySelector('.corpo');
var doc = $(document);
var l = $('.principal');
var painel = $('.painel');
var vh = $(window).height();

var openMenu = function() {
  corpo.classList.toggle('corpo--ativo');
  menu.classList.toggle('nav__lista--ativo');
};

// revela conteudo do primerio painel por padrao
painel.eq(0).find('.painel__conteudo').addClass('painel__conteudo--ativo');

var principalFx = function() {
  var ds = doc.scrollTop();
  var of = vh / 4;
  
  // se os paineis estao no viewport, revela o conteudo, se nao, esconde isto.
  for (var i = 0; i < painel.length; i++) {
    if (painel.eq(i).offset().top < ds+of) {
     painel
       .eq(i)
       .find('.painel__conteudo')
       .addClass('painel__conteudo--ativo');
    } else {
      painel
        .eq(i)
        .find('.painel__conteudo')
        .removeClass('painel__conteudo--ativo')
    }
  }
};

var principal = function(e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);

  $('html, body').stop().animate({
      'scrollTop': $target.offset().top
  }, 300, 'swing', function () {
      window.location.hash = target;
  });
}

var init = function() {
  corpo.addEventListener('click', openMenu, false);
  window.addEventListener('scroll', principalFx, false);
  window.addEventListener('load', principalFx, false);
  $('a[href^="#"]').on('click',principal);
};

doc.on('ready', init);