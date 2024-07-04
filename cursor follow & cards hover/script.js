document.getElementById("cards").onmousemove = e => {
  for(const card of document.getElementsByClassName("card")) {
    const rect = card.getBoundingClientRect(),
          x = e.clientX - rect.left,
          y = e.clientY - rect.top;

    card.style.setProperty("--mouse-x", `${x}px`);
    card.style.setProperty("--mouse-y", `${y}px`);
  };
}

document.querySelectorAll('p, h1, h2, h3, h4, h5, h6, span, a').forEach(element => {
  element.addEventListener('mouseenter', () => {
      element.classList.add('invert-color');
  });

  element.addEventListener('mouseleave', () => {
      element.classList.remove('invert-color');
  });
});

