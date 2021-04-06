const LIST_SELECTOR = '.post-list';

export default class List {
  list: HTMLUListElement;

  constructor() {
    // INITIAL SETUP & EVENT CALLBACKS SETUP
    this.list = document.querySelector(LIST_SELECTOR);
  }

  handleClick = (e: Event) => {
    const item = e.currentTarget as HTMLElement;
  };
}
