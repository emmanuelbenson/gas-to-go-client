const post = async (endpoint = "", data = {}) => {
    const method = "POST";

    return $.ajax({
        url: endpoint,
        type: method,
        data: data
    });
};

const get = async (endpoint = "", data) => {
    const method = "GET";

    return $.ajax({
        url: endpoint,
        type: method,
        data: data
    });
};
