const LIST_SELECTOR = '.post-list';

class List {
  list: HTMLUListElement;

  constructor() {
    // INITIAL SETUP & EVENT CALLBACKS SETUP
    this.list = document.querySelector(LIST_SELECTOR);
  }
}

export default () => new List();
