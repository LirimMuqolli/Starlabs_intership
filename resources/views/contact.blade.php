<x-app-layout>

<div id="progress">
      <span id="progress-value">&#x1F815;</span>
    </div>
    <div class="container mx-auto">
        <x-contact-section />
    </div>
<style>
           #progress {
            position: fixed;
            bottom: 100px;
            right: 40px;
            height: 60px;
            width: 60px;
            display: none;
            place-items: center;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            }
            #progress-value {
            display: block;
            height: calc(100% - 15px);
            width: calc(100% - 15px);
            background-color: #ffffff;
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-size: 35px;
            color: #1aa3ff;
            }
</style>
<script>

let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);
  if (pos > 100) {
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient(#1aa3ff ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};
window.onscroll = calcScrollValue;
window.onload = calcScrollValue;


</script>
</x-app-layout>

