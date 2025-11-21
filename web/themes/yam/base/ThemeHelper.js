class ThemeHelper {
  static globalState = {};
  static async fetch(url, body = {}, method = "GET", json = false) {
    const headers = new Headers();
    if (json) {
      headers.set("Content-Type", "application/json");
    }
    const requestInit = {
      method,
      headers,
    };
    if (method === "POST" || method === "PUT") {
      requestInit.body = body instanceof FormData ? body : JSON.stringify(body);
    }
    const result = await fetch(url, requestInit);
    const data = await(json ? result.json() : result.text());
    return {data: data, status: result.status};
  }

  static async fetchReplace(element, url, body = {}, method = "GET") {
    const response = await this.fetch(url, body, method);
    element.innerHTML = response.data;
    Drupal.attachBehaviors(element);
    return response.status;
  }

  static async fetchAppend(element, url, body = {}, method = "GET") {
    const response = await this.fetch(url, body, method);
    const html = response.data;
    element.insertAdjacentHTML("beforeend", html);
    Drupal.attachBehaviors(element);
    return response.status;
  }

}
Drupal.ThemeHelper = ThemeHelper;
