import axios from "axios";

class ApiService {
	static UNAUTHORIZED = 401;
	static FORBIDDEN = 403;
	static NOT_FOUND = 404;
	static INTERNAL_SERVER_ERROR = 500;

	constructor(baseUrl) {
		this._api = axios.create({
			baseURL: baseUrl,
			withCredentials: true
		});

		this._api.interceptors.response.use(
			(response) => {
			  return response;
			},
			async (error) => {
			  if (
				error.response?.status === ApiService.UNAUTHORIZED ||
				error.response?.status === ApiService.FORBIDDEN
			  ) {
				this.handleRedirect('/');
				return;
			  }
	  
			  if (error.response?.status === ApiService.NOT_FOUND) {
				console.error('Not found route:', error);
			  }
	  
			  if (error.response?.status === ApiService.INTERNAL_SERVER_ERROR) {
				console.error('Server Error:', error);
			  }
	  
			  return Promise.reject(error);
			},
		  );
	}

	getInstance() {
		return this._api;
	}

	_handleRedirect(route) {
		const newWindow = window.open(route);
	}
}

export default ApiService;