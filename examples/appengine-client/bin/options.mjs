export default {
  name: {
    description: "Google Cloud project name",
    default: "Blackbaud SKY API AppEngine Client Example",
  },
  billing: {
    description: "Google Cloud billing account ID for this project",
  },
  region: {
    description: "Google Cloud region in which to create App Engine instance",
  },
  supportEmail: {
    description: "Support email address for app OAuth consent screen",
  },
  users: {
    description: "Google IDs of users allowed to access app (comma-separated)",
  },
  accessKey: {
    description: "Blackbaud SKY API subscription access key",
    url: "https://developer.blackbaud.com/subscriptions",
  },
  clientId: {
    description: "Blackbaud SKY API app OAuth client ID",
    url: "https://developer.blackbaud.com/apps",
  },
  clientSecret: {
    description: "Blackbaud SKY API app OAuth client secret",
  },
};
