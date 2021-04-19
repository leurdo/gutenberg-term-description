var el = wp.element.createElement;

import MyCatsSelector from './my-cats-selector';

const taxes = window.mygutenTaxData;

function customizeProductTypeSelector( OriginalComponent ) {
    return function ( props ) {
        if ( taxes.includes( props.slug ) ) {
            return el( MyCatsSelector, props );
        } else {
            return el( OriginalComponent, props );
        }
    };
}

wp.hooks.addFilter(
    'editor.PostTaxonomyType',
    'guten-test',
    customizeProductTypeSelector
);