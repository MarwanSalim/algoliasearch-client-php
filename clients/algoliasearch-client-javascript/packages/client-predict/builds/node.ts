import type { InitClientOptions } from '@experimental-api-clients-automation/client-common';
import {
  createMemoryCache,
  createNullCache,
} from '@experimental-api-clients-automation/client-common';
import { createHttpRequester } from '@experimental-api-clients-automation/requester-node-http';

import { createPredictApi } from '../src/predictApi';
import type { PredictApi } from '../src/predictApi';

export * from '../src/predictApi';

export function predictApi(
  appId: string,
  apiKey: string,
  options?: InitClientOptions
): PredictApi {
  if (!appId) {
    throw new Error('`appId` is missing.');
  }

  if (!apiKey) {
    throw new Error('`apiKey` is missing.');
  }

  return createPredictApi({
    appId,
    apiKey,
    timeouts: {
      connect: 2,
      read: 5,
      write: 30,
    },
    requester: options?.requester ?? createHttpRequester(),
    userAgents: [{ segment: 'Node.js', version: process.versions.node }],
    responsesCache: options?.responsesCache ?? createNullCache(),
    requestsCache: options?.requestsCache ?? createNullCache(),
    hostsCache: options?.hostsCache ?? createMemoryCache(),
    ...options,
  });
}