export default {
  name: {
    description: 'Google Cloud project name',
    default: 'SKY API on App Engine Example'
  },
  billing: {
    description: 'Google Cloud billing account ID for this project'
  },
  region: {
    description: 'Google Cloud region in which to create App Engine instance'
  },
  supportEmail: {
    description: 'Support email address for app OAuth consent screen'
  },
  accessKey: {
    description: 'Blackbaud SKY API subscription access key',
    url: 'https://developer.blackbaud.com/subscriptions'
  },
  clientId: {
    description: 'Blackbaud SKY API app OAuth client ID',
    url: 'https://developer.blackbaud.com/apps'
  },
  clientSecret: {
    description: 'Blackbaud SKY API app OAuth client secret'
  }
};
