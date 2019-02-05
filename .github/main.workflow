workflow "Push to Github pages" {
  on = "push"
  resolves = ["Push"]
}

action "Master branch" {
  uses = "actions/bin/filter@c6471707d308175c57dfe91963406ef205837dbd"
  args = "branch master"
}

action "Push" {
  uses = "./actions/push"
  needs = ["Master branch"]
  secrets = ["GITHUB_TOKEN"]
}
