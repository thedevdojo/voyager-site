workflow "Push to Github pages" {
  on = "push"
  resolves = ["Push"]
}

action "Push" {
  uses = "maxheld83/ghpages@v0.2.0"
  env = {
    BUILD_DIR = "build_production/"
  }
  secrets = ["GH_PAT"]
}
