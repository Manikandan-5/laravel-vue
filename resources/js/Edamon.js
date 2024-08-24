import axios from 'axios';

const API_BASE_URL = 'https://api.edamon.com';
const API_KEY = '36956c287e5b701f5541f5ce0c00b253'; // Replace with your actual API key

const apiClient = axios.create({
  baseURL: API_BASE_URL,
  headers: {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${API_KEY}`
  }
});

export default {
  search(query) {
    return apiClient.get('/search', {
      params: { q: query }
    }).catch(error => {
      console.error('API request error:', error.response ? error.response.data : error.message);
      throw error; // Rethrow error to be handled by component
    });
  }
};
