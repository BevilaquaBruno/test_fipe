async function makeRequest(url, callback) {
  return axios.get("https://parallelum.com.br/fipe/api/v2/"+url).then(callback);
}
