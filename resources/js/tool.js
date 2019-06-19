Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'external-services',
            path: '/external-services',
            component: require('./components/Tool'),
        },
    ])
})
