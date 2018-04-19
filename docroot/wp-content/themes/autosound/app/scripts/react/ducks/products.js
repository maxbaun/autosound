import {fromJS} from 'immutable';
import {createSelector} from 'reselect';

import * as utils from '../utils/duckHelpers';
import {setImageData, transformProduct} from '../utils/wordpressHelpers';

export const types = {
	...utils.requestTypes('PRODUCTS'),
	PRODUCTS_GET: 'PRODUCTS_GET',
	PRODUCTS_RESPONSE: 'PRODUCTS_RESPONSE',
	PRODUCTS_SET: 'PRODUCTS_SET'
};

export const actions = {
	productsSet: obj => utils.action(types.PRODUCTS_SET, obj)
};

const initialState = fromJS([]);

export default (state = initialState, action) => {
	switch (action.type) {
		case types.PRODUCTS_SET:
			return fromJS(action.payload);

		default:
			return state;
	}
};

const getProducts = state => state.getIn(['app', 'products']);

export const selectors = {
	getProducts: createSelector([getProducts], products => {
		return products.map(transformProduct);
	})
};
