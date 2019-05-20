import domReady from '@wordpress/dom-ready'
import apiFetch from '@wordpress/api-fetch'
import { unregisterBlockType } from '@wordpress/blocks'

apiFetch({ path: '/hardpass/v2/blacklist' }).then(blocks => {
  JSON.parse(blocks).forEach(block => {
    domReady(() => unregisterBlockType(block))
  })
})