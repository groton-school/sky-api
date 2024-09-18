import cli from '@battis/qui-cli';

const map = {
  'var/afe-rostr.json': 'packages/oneroster/src',
  'var/school.json': 'packages/school/src'
};

cli.init();

for (const schema in map) {
  cli.shell.exec(
    `npx openapi-typescript ${schema} -o ${
      map[schema as keyof typeof map]
    }/schema.ts`
  );
}
