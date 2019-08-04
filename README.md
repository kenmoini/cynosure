# Cynosure

I couldn't come up with some cute cuddly Kube-y name so here's Cynosure.
Don't bother looking for a while, it's probably still shit and quickly done.

## What the..

What is Cynosure?  Cynosure is a Kubernetes DevOps Dashboard, meaning operators can manage and developers and deploy as first-class citizens.  No longer are you a slave to kubectl and pokey-proxies.

## Primary Targeted Functions

- **Cluster/Context Multiplexing** - Connect one Cynosure Dash to multiple Kubernetes clusters.
- **Namespace Switching** - Don't deploy to default by accident again...
- **Running of JSON/YAML** - Switch, drop, and go.  Syntax validation at some point in the future.
- **Easy creation of K8s objects** - Deploy a pod, create a service, and set an ingress all without any configuration.
- **Secure & Portable Secrets** - Using Vault encryption will protect your secret secrets with a secret.  You can even check in the encrypted form into Git.

## What works (at least mostly)

- Core - Roles (needs show resource maybe but I don't see a point)
- Core - Organizations (needs show resource maybe but I don't see a point)
- Core - Groups (needs show resource maybe but I don't see a point)
- Core - Users (needs more show resources for profile I guess)
- Core - Settings (weird resource methods, don't look)
- Core - Cluster Management

### Planned

- **Certificate Authority & Basic PKI Automation** - Create a CA, server, client, and service certificates, and have them auto-rotate and renew.
- **Helm Click-to-Deploy Catalog & Operations** - Run Helm across multiple clusters with minimal configuration and built-in key management and rotation.  Also a deployer that pre-parses available values and presents them as overrides in the WebUI.
- **RollerSK8s** - Build your own automated and integrated DevSecOps pipeline.
- **Image Watchdog** - Automatically find new images in a local or remote registry and have them redeployed as a rolling update with a single annotation.
- **Stats** - Everyone loves stats and graphs.


Really though, don't bother trying to deploy this though, it's probably not working...if you do want to deploy though...

## Deploying

Requires PostgreSQL server.
It's a Laravel application, and can be tested right now by running the following commands in a Laravel compliant environment:

```
$ cd application
$ cp .env.example .env
$ composer install
$ npm install
$ npm run dev
$ php artisan key:generate
$ php artisan cache:clear
$ php artisan migrate --seed
$ php artisan serve
```

Docker Hub container coming soon.