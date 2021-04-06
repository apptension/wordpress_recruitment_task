import jQuery from 'jquery';
import '../scss/app.scss';
import List from './modules/_list';

const appStart = () => {
  const list = new List();
};

jQuery(() => {
  appStart();
});
