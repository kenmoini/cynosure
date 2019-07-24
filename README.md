# Cynosure

I couldn't come up with some cute cuddly Kube-y name so here's Cynosure.
Don't bother looking for a while, it's probably still shit and quickly done.

## What the..

What is Cynosure?  Cynosure is a Kubernetes DevOps Dashboard, meaning operators can manage and developers and deploy as first-class citizens.  No longer are you a slave to kubectl and pokey-proxies.

## Functions

- **Cluster/Context Multiplexing** - Connect one Cynosure Dash to multiple Kubernetes clusters.
- **Namespace Switching** - Don't deploy to default by accident again...
- **Running of JSON/YAML** - Switch, drop, and go.  Syntax validation at some point in the future.
- **Easy creation of K8s objects** - Deploy a pod, create a service, and set an ingress all without any configuration.

### Planned

- **Helm Click-to-Deploy Catalog & Operations** - Run Helm across multiple clusters with minimal configuration and built-in key management and rotation.  Also a deployer that pre-parses available values and presents them as overrides in the WebUI.
- **Stats** - Everyone loves stats and graphs.


Really though, don't bother trying to deploy this though, it's probably not working...if you do want to deploy though...

## Deploying

It's a Laravel application, and can be tested right now by running the following commands in a Laravel compliant environment:

```
$ cd application
$ cp .env.example .env
$ touch cynosure.sqlite
$ composer install
$ php artisan key:generate
$ php artisan cache:clear
$ php artisan migrate
$ php artisan serve
```

Docker Hub container coming soon.