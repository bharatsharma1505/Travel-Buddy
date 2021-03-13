/*
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except
 * in compliance with the License. You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under the
 * License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing permissions and
 * limitations under the License.
 */
<!-- The core Firebase JS SDK is always required and must be listed first -->

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyC_pr8ukuOvnIINmeLctWKytzoc-AK1b8o",
    authDomain: "cabbazar-90cef.firebaseapp.com",
    databaseURL: "https://cabbazar-90cef.firebaseio.com",
    projectId: "cabbazar-90cef",
    storageBucket: "",
    messagingSenderId: "45011371477",
    appId: "1:45011371477:web:ffe83da866bcb216"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
var config = {
  apiKey: "YOUR_API_KEY",
  authDomain: "your-app.firebaseapp.com",
  databaseURL: "https://your-app.firebaseio.com",
  storageBucket: "your-app.appspot.com",
};
firebase.initializeApp(config);

// Google OAuth Client ID, needed to support One-tap sign-up.
// Set to null if One-tap sign-up is not supported.
var CLIENT_ID = 'YOUR_OAUTH_CLIENT_ID';
