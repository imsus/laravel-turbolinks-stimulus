import { Controller } from "stimulus"

export default class extends Controller {
  static targets = ['slide']

  initialize() {
    this.showSlide(0)
  }

  next() {
    if (this.index === 3) {
        this.showSlide(0)
    } else {
        this.showSlide(this.index + 1)
    }
  }

  previous() {
    if (this.index === 0) {
        this.showSlide(3)
    } else {
        this.showSlide(this.index - 1)
    }
  }

  showSlide(index) {
    this.index = index
    this.slideTargets.forEach((el, i) => {
      el.classList.toggle("slide--current", index == i)
    })
  }
}