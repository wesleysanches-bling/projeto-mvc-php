import ApiService from "./http/http-client-adapter"

const createApiInstance = (baseURL) => {
	return new ApiService(baseURL).getInstance();
}

const HttpApiMVC = createApiInstance('/api');

export { HttpApiMVC };