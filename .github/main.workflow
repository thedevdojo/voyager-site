workflow "Push to Github pages" {
  on = "push"
  resolves = ["Push"]
}

action "Master branch" {
  uses = "actions/bin/filter@c6471707d308175c57dfe91963406ef205837dbd"
  args = "branch master"
}

action "Push" {
  uses = "maxheld83/ghpages@v0.1.1"
  env = {
    BUILD_DIR = "build_production/"
  }
  needs = ["Master branch"]
  secrets = ["GH_PAT"]
}
