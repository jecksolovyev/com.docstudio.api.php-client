#!/bin/bash
#npm install @openapitools/openapi-generator-cli -g
echo '{"invokerPackage":"DocStudio\\Client", "apiPackage":"Api", "modelPackage":"Model"}' > config.json
npx openapi-generator-cli generate -i https://api.docstudio.com/v3/api-docs --skip-validate-spec -g php -o ./generated-client -c config.json
cp -rf ./generated-client/lib/ .
cp -rf ./generated-client/test/ .
cp -rf ./generated-client/docs/ .
rm openapitools.json
rm config.json
rm -r generated-client
