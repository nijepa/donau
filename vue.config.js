module.exports = {
  devServer: {
    proxy: {
      'data.php': {
        target: 'http://localhost:8080/don/donau/data.php',
        ws: true,
        changeOrigin: true
      },
      '^/foo': {
        target: '<other_url>'
      }
    }
  }
}