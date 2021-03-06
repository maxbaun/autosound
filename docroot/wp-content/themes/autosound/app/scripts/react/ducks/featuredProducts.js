import {fromJS} from 'immutable';
import {createSelector} from 'reselect';

import * as utils from '../utils/duckHelpers';
import {transformProduct} from '../utils/wordpressHelpers';

export const types = {
	...utils.requestTypes('FEATURED_PRODUCTS'),
	FEATURED_PRODUCTS_GET: 'FEATURED_PRODUCTS_GET',
	FEATURED_PRODUCTS_RESPONSE: 'FEATURED_PRODUCTS_RESPONSE',
	FEATURED_PRODUCTS_SET: 'FEATURED_PRODUCTS_SET',
	FEATURED_PRODUCTS_RESET: 'FEATURED_PRODUCTS_RESET'
};

export const actions = {
	productsSet: obj => utils.action(types.FEATURED_PRODUCTS_SET, obj)
};

const initialState = fromJS([]);

export default (state = initialState, action) => {
	switch (action.type) {
		case types.FEATURED_PRODUCTS_SET:
			return fromJS(action.payload);

		case types.FEATURED_PRODUCTS_RESET:
			return initialState;

		default:
			return state;
	}
};

const getFeaturedProducts = state => state.getIn(['app', 'featuredProducts']);

export const selectors = {
	getFeaturedProducts: createSelector([getFeaturedProducts], products => products.map(transformProduct))
};
