apiFetch({ path: '/hardpass/v2/blacklist' }).then(blocks => {
  JSON.parse(blocks).forEach(block => {
    domReady(() => unregisterBlockType(block))
  })
})