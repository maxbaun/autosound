// Startup point for client side application
import React from 'react';
import {render} from 'react-dom';
import {Provider} from 'react-redux';
import createHistory from 'history/createBrowserHistory';
import {ConnectedRouter} from 'react-router-redux';
import {Route} from 'react-router-dom';
import qhistory from 'qhistory';
import {parse, stringify} from 'qs';

import store from './store';
import App from './containers/app';

module.exports = class Shop {
	constructor(el) {
		const history = qhistory(
			createHistory({
				basename: `/${AutosoundGlobalConstants.shopBase}`
			}),
			stringify,
			parse
		);

		const rawInitialData = el.getAttribute('data-initial-data');
		el.removeAttribute('data-initial-data');

		const initialData = JSON.parse(rawInitialData);

		const storeData = {
			state: {
				head: {
					...initialData
				}
			}
		};

		const s = store(history, storeData);

		render(
			<Provider store={s}>
				<ConnectedRouter history={history}>
					<Route component={App}/>
				</ConnectedRouter>
			</Provider>
			,
			el
		);
	}
};
