const { create } = require("browser-sync");
const sync = create();

const reload = done => {
    sync.reload();
    done();
};

const server = () => {
    sync.init({
        proxy: "brigline-site",
        ui: false,
        notify: false
    });
};

module.exports = {
    sync,
    server,
    reload
};
