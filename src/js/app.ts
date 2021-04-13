import jQuery from 'jquery';
import '../scss/app.scss';
import List from './modules/_list';

const appStart = () => {
  List();
};

jQuery(() => {
  appStart();
});
