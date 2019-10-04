FROM alpine:latest

RUN apk upgrade && \
    apk add --update npm && \
    npm install -yg yarn && \
    yarn global add @vue/cli \
    yarn global add @vue/cli-service-global

RUN addgroup -g 1000 -S app && \
    adduser -u 1000 -S app -G app

WORKDIR /app
USER app
