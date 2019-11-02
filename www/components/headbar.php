<div class="headbar">
  <a href=".." title="Main page">
    <img class="icon" src="images/earth.svg">
  </a>
  <span class="title"></span>
</div>

<style>

  .headbar{
    --img-rad:calc(var(--img-side) / 2);
    z-index:1;
    padding:var(--img-pad) 0;
    background-color:var(--green);
    font-size:var(--navbar-font);
    font-family:sans-serif;
    text-align:center;
    font-weight:bold;
    color:white;
    position:fixed;
    width:100%;
    left:0;
    top:0;
  }

  .headbar .icon{
    cursor:pointer;
    position:absolute;
    height:auto;
    width:var(--img-side);
    left:var(--img-pad);
    top:calc(var(--navbar-h) - var(--img-rad));
    border:solid 2px var(--black);
    border-radius:100%;
  }

</style>
