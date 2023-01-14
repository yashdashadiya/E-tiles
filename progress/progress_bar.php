<style>
.progress-bar {
    background: linear-gradient(to right, #f37e21 var(--scroll), transparent 0);
    background-repeat: no-repeat;
    width: 100%;
    position: fixed;
    bottom: 0px;
    left: 0;
    height: 5px;
    z-index: 10;
}
</style>

<!-- This is the bar which shows scroll percentage -->
<div class="progress-bar"></div>

<!-- Script used to generate --scroll variable with current scroll percentage value -->
<script>
var element = document.documentElement,
  body = document.body,
  scrollTop = 'scrollTop',
  scrollHeight = 'scrollHeight',
  progress = document.querySelector('.progress-bar'),
  scroll;

document.addEventListener('scroll', function() {
  scroll = (element[scrollTop]||body[scrollTop]) / ((element[scrollHeight]||body[scrollHeight]) - element.clientHeight) * 100;
  progress.style.setProperty('--scroll', scroll + '%');
});
</script>