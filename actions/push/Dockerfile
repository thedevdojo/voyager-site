FROM node:lts-alpine

LABEL version="1.0.0"
LABEL repository="https://github.com/the-control-group/voyager-site"
LABEL homepage="https://github.com/the-control-group/voyager-site"

RUN apk --update --no-cache add git git-subtree

COPY "entrypoint.sh" "/entrypoint.sh"
ENTRYPOINT ["/entrypoint.sh"]
CMD ["default"]