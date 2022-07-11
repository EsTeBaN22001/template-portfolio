const config = {
  type: 'carousel',
  startAt: 0,
  perView: 1,
  gap: 0,
  focusAt: 'center',
  autoplay: 5000,
  animationDuration: 1000,
  hoverpause: false
}

new Glide('.glide', config).mount()