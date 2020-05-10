it('loads page', () => {
  cy.visit('/')
  cy.contains('LPF works!')
})
