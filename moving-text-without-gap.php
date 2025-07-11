<div class="outer">
  <div class="loop">
    <div class="content">Giving is the best form of action - be the change - giving is the best form of action - be the change</div>
  </div>
</div>

<style>
  .outer {
    overflow: hidden;
    white-space: nowrap;
    margin-left: 10px;
  }

  .loop {
    display: inline-block;
    white-space: nowrap;
    will-change: transform;
    animation: scroll-left 15s linear infinite;
  }

  .content {
    font-family: Manrope;
    font-size: 2.5rem;
    font-weight: 700;
    display: inline-block;
    padding-right: 100px;
    color: #fff;
  }

  @keyframes scroll-left {
    0% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(-50%);
    }
  }
</style>

<script>
  document.querySelectorAll('.outer').forEach(el => {
    let content = el.querySelector('.content');
    repeatContent(content, el.offsetWidth);

    let slider = el.querySelector('.loop');
    slider.innerHTML = slider.innerHTML + slider.innerHTML;
  });

  function repeatContent(el, till) {
    let html = el.innerHTML;
    let counter = 0;

    while (el.offsetWidth < till && counter < 100) {
      el.innerHTML += html;
      counter++;
    }
  }
</script>
