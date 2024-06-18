import Axios from "axios";

const axios = Axios.create({
    baseURL: "http://127.0.0.1:8000",
    headers: {
        "X-Requested-With": "XMLHttpRequest",
        Authorization:
            "Bearer 2|uS2CAxmgUsurnTe561wEEBftN2W2guYf4bsGuHDf7cd370dc",
    },
    withCredentials: true,
    withXSRFToken: true,
});

// Set the Bearer auth token.
const setBearerToken = (token) => {
    axios.defaults.headers.common[
        "Authorization"
    ] = `Bearer 2|uS2CAxmgUsurnTe561wEEBftN2W2guYf4bsGuHDf7cd370dc`;
};

export { axios, setBearerToken };
