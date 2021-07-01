import axios from "axios";
import {writeFileSync} from "fs"

export const mapping = new Map<string, string>();
mapping.set("openapi/auth/auth-api.yml", "https://docs.finbricks.com/api/auth-api.yml")
mapping.set("openapi/eshop/pgw-eshop-api.yml", "https://docs.finbricks.com/api/eshop-api.yml")
mapping.set("openapi/info/info-api.yml", "https://docs.finbricks.com/api/info-api.yml")
mapping.set("openapi/platform/pgw-platform-api.yml", "https://docs.finbricks.com/api/platform-api.yml")
mapping.set("openapi/recurring_payment/recurring-payment-api.yml", "https://docs.finbricks.com/api/recurring_payment-api.yml")
mapping.set("openapi/status/status-api.yml", "https://docs.finbricks.com/api/status-api.yml")


async function downloadYml(url: string, path: string) {
    console.log(`Downloading from: ${url}`)
    const res = await axios.get(url)
    try {
        if (res.status === 200) {
            const data = res.data;
            console.log("Downloaded done:" + url)
            writeFileSync(path, data, {encoding: 'utf8', flag: 'w'})
        } else {
            console.log("Cannot download file from " + url)
            console.log(res.status);
            return
        }
    } catch (e) {
        console.log("Cannot write file to " + path)
        console.log(e)
    }
}

async function process() {

    for (let entry of Array.from(mapping.entries())) {
        const url = entry[1];
        const path = entry[0]
        await downloadYml(url, path)
    }
}

process().then(() => console.log("done")).catch(console.error)
